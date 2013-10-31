/**
 * Plugin is an image slider
 * 
 * Use:
 * In the page web add a div where the images are declared. This div must
 * have a id and a dimensions (width & height)
 *
 * Parameters:
 * container: Div where the images are declared
 * time: Time in seconds, the images are showed before pass the following.
 */
 
 


   function mostrar(){
       alert('Mostrar::Init Function');
    };
 
   var ImageSlider = {
    
    enableDebug: true,
    debugSetup: {
                  file: "ImageSlider.js"
                                              
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
    init:function (theParameters) {
       
       var methodName = "init";
       
       this.debugEnter(methodName);
       
       var idContainer = theParameters['container'];
       var timeout = theParameters['timeout'];
       
       this.debug(methodName,"The container id where the images will be slided [ " + idContainer + " ] and the timeout [ " + timeout +" ] seconds");    
       
       //get the properties, width and height of the container   
       
       this.debugExit(methodName);
       
    }
   };
  

