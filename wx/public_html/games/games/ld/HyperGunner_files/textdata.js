
var textdata = [];
var textformat = {};

BrowserDetect.init();

switch(BrowserDetect.Language)
{
	default:
		textdata[0] = "LEVEL ";
		textdata[1] = "Tap Screen To Play";
		textdata[2] = "Switch to portrait mode";
		textdata[3] = "GAME OVER";
		textdata[4] = "Welcome home, pilot.";
		textdata[5] = "Planet Earth salutes you.";
		textdata[6] = "Miles to Earth = ";
		textdata[7] = "Miles from home = ";
		textdata[8] = "LEVEL COMPLETE";
		textdata[9] = "Enter your name";
		textformat.thousandseparator = ",";
		break;
}
