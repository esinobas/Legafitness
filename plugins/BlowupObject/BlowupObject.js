/**
 * Plugin is blowup-blowdown object. This plugin can be used for blowup image, div...
 * 
 * Use:
 * Add the script and call the plugin to blowup / blowdown a object in the web 
 * browser
 *
 * Parameters:
 * object: Object will be blowup or blowdown
 * finishSize: The object finish size (width and height).
 * time:
 */
 
 var BlowupObject = {
 
 enableDebug: true,
    debugSetup: {
                  file: "BlowupObject.js"
                                              
    },
    debugEnter: function (theMethod) {
            if (this.enableDebug == true){
               var textToDebug = this.debugSetup['file'] + '::'+theMethod+'()::Enter';
               console.debug(textToDebug);
            }
    },
    debugExit: function (theMethod) {
            if (this.enableDebug == true){
               var textToDebug = this.debugSetup['file'] + '::'+theMethod+'()::Exit';
               console.debug(textToDebug);
            }
    },
    debug: function (theMethod, theText) {
            if (this.enableDebug == true){
               var textToDebug = this.debugSetup['file'] + '::'+theMethod+'()::'+theText;
               console.debug(textToDebug);
            }
    },
    /**
     * The parameters:
     * 'object': The object id that will be blowup and blowdown
     * 'finishSize': object finish 'width and heigth'
     * 'time': seconds that must pass in the operation
    */
    init:function(theParameters){
       var methodName = "init";
       
       this.debugEnter(methodName);
       
       var idObject = theParameters['object'];
       this.debug(methodName, 'Object [ ' + idObject + ' ]');
       
       this.debugExit(methodName);
    }
 
 };