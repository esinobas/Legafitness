/**
 * Plugin lightbox that is used to show images within a container
 * with animation
 *
 */
 
 
var Lightbox = {
 
    shadowColorM: "black",
    opacityM: 0.75,
    imageM: "",
    imageWidthM: "0px",
    imageHeightM: "0px",
    lightBoxColorM: "white",
    paddingTopM: "10px",    
    paddingLeftM: "10px",
    paddingBottomM: "10px",
    paddingRigthM: "10px",
    textM:"",
    positionTextM: "down", // allowed values: up/down
    
    enableDebug: true,
    debugSetup: {
                  file: "Lightbox.js"
                                              
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
    show: function (theParameters){
       var methodName = "show";
       
       this.debugEnter(methodName);
       
       imageM = theParameters['image'];
       imageWidthM = theParameters['width'];
       imageHeightM = theParameters['height'];
       
       this.debug(methodName, 'image [ ' + imageM + ' ]. width [ ' +imageWidthM  + 
                                          'px ]. height [ ' + imageHeightM + 'px ]');
       
       this.debug(methodName, "Create and add the shadow");       
       var shadow = $("<div id=\"shadow\"></div>");
       $('body').append(shadow);
       
       this.debug(methodName, "Show the shadow");
            
       $('#shadow').show();
       
       var lightbox = $("<div id=\"lightbox\"</div>");
       
       this.debug(methodName, "Create lightbox");
      
       this.debug(methodName, "Show the lightbox");
       $('body').append(lightbox); 
       $('#lightbox').show();
       $('#lightbox').css({'width':imageWidthM+'px',
                           'height': imageHeightM+'px',
                           'margin-top':'-'+(parseInt(imageHeightM)/2)+'px', 
                           'margin-left':'-'+(parseInt(imageWidthM)/2)+'px',
                           'padding':'10px'});
                           
       this.debug(methodName,"Create the image");
       var image = $("<img src=\""+imageM+"\" width=\""+imageWidthM+"\" height=\""+
                imageHeightM+"\" />");
       
       this.debug(methodName,"Add the image to the lightbox");
       
       $('#lightbox').append(image);
       
       this.debugExit(methodName);
    }
};