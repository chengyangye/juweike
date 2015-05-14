function HeatmapOverlay(map,cfg){
    this._map=map;
    this.conf = cfg;
    this.heatmap=null;
    this.latlngs=[];
    this.bounds=null;        
}
HeatmapOverlay.prototype = new BMap.Overlay(); 
HeatmapOverlay.prototype.initialize = function(){  
 var map=this._map;
 var el = document.createElement("div");  
 el.style.position = "absolute";  
 el.style.top = 0;
 el.style.left = 0;
 el.style.border = 0;
 el.style.width = this._map.getSize().width+"px";  
 el.style.height = this._map.getSize().height+"px";
 this.conf.element = el;
 map.getPanes().labelPane.appendChild(el);    
 this.heatmap=h337.create(this.conf);
 this._div = el;    
 return el; 
 }
 HeatmapOverlay.prototype.draw = function(){
    
    var currentBounds = this._map.getBounds();
    
    if (currentBounds.equals(this.bounds)) {
      return;
    }
    this.bounds = currentBounds;
    
    var ne = this._map.pointToOverlayPixel(currentBounds.getNorthEast()),
        sw = this._map.pointToOverlayPixel(currentBounds.getSouthWest()),
        topY = ne.y,
        leftX = sw.x,
        h = sw.y - ne.y,
        w = ne.x - sw.x;

    this.conf.element.style.left = leftX + 'px';
    this.conf.element.style.top = topY + 'px';
    this.conf.element.style.width = w + 'px';
    this.conf.element.style.height = h + 'px';
    this.heatmap.store.get("heatmap").resize();
       
    if(this.latlngs.length > 0){
        this.heatmap.clear();
        
        var len = this.latlngs.length;
            d = {
            max: this.heatmap.store.max,
            data: []
        };

        while(len--){
            var latlng = this.latlngs[len].latlng;
	    
	if(!currentBounds.containsPoint(latlng)) { continue; }
       // if(!BMapLib.GeoUtils.isPointInRect(latlng, currentBounds)){continue;}

        var divPixel = this._map.pointToOverlayPixel(latlng),
            screenPixel = new BMap.Pixel(divPixel.x - leftX, divPixel.y - topY);
        var roundedPoint = this.pixelTransform(screenPixel);        
             d.data.push({ 
            x: roundedPoint.x,
            y: roundedPoint.y,
            count: this.latlngs[len].c
        });
        }
        this.heatmap.store.setDataSet(d);
    }
}
HeatmapOverlay.prototype.pixelTransform = function(p){
    var w = this.heatmap.get("width"),
        h = this.heatmap.get("height");

    while(p.x < 0){
        p.x+=w;
    }
    
    while(p.x > w){
    p.x-=w;
    }
        
    while(p.y < 0){
    p.y+=h;
    }

    while(p.y > h){
    p.y-=h;
    }

    p.x = (p.x >> 0);
    p.y = (p.y >> 0);
    
    return p;
}
HeatmapOverlay.prototype.setDataSet = function(data){

var currentBounds = this._map.getBounds();
    var mapdata = {
        max: data.max,
        data: []
    };
    var d = data.data,
        dlen = d.length;
	

    this.latlngs = [];
   
    while(dlen--){    
        var latlng = new BMap.Point(d[dlen].lat, d[dlen].lng);
        if(!currentBounds.containsPoint(latlng)) { 
            continue; 
        }
        this.latlngs.push({latlng: latlng, c: d[dlen].count});
        var point = this.pixelTransform(this._map.pointToOverlayPixel(latlng));
        
        //start modify by lishaoyuan

        var divPixel = this._map.pointToOverlayPixel(latlng),
            leftX = this._map.pointToOverlayPixel(currentBounds.getSouthWest()).x,
            topY = this._map.pointToOverlayPixel(currentBounds.getNorthEast()).y,
            screenPixel = new BMap.Pixel(divPixel.x - leftX, divPixel.y - topY);
        point = this.pixelTransform(screenPixel);
        //end modify

       
    	mapdata.data.push({x: point.x, y: point.y, count: d[dlen].count});
    }
    this.heatmap.clear();
    this.heatmap.store.setDataSet(mapdata);
}
HeatmapOverlay.prototype.addDataPoint = function(lat, lng, count){
    var latlng = new BMap.Point(lat, lng),
        point = this.pixelTransform(this._map.pointToOverlayPixel(latlng));
    
    this.heatmap.store.addDataPoint(point.x, point.y, count);
    this.latlngs.push({ latlng: latlng, c: count });
}
HeatmapOverlay.prototype.toggle = function(){
    this.heatmap.toggleDisplay();
}