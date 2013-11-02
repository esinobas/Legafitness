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
    //theParametes: container->the object div where the images are showed. 
    // timeout -> the time which image is showed.
    init:function (theParameters) {
       
       var methodName = "init";
       
       this.debugEnter(methodName);
       
       var idContainer = theParameters['container'];
       var timeout = theParameters['timeout'];
       
       this.debug(methodName,"The container id where the images will be slided [ " + idContainer + " ] and the timeout [ " + timeout +" ] seconds");    
       
       idContainer = '#'+idContainer;
       
       var numImages = $(idContainer).find('img').length;
       this.debug(methodName, "The container [ " + idContainer +" ] has [ " + numImages +" ] images");
       var widthContainer =  $(idContainer).css("width");
       var heightContainer =  $(idContainer).css("height");
       this.debug(methodName, 'The container dimensions are: ' + widthContainer + ' x ' + heightContainer +'.');
       
       this.debug(methodName, "Set the max width to the images and hides them");       
       
       $(idContainer).find('img').each(
          function (index) {
              $( this ).css({"width":widthContainer,
                             "height":heightContainer});
              if (index > 0){
                 $(this).hide();              
              }
          }       
       );
       
       this.debug(methodName, "Create timer with timeout [ " + timeout + " ] seconds");
       var idx = 1;
       setInterval(function(){
          ImageSlider.debug(methodName, "setInterval::timeout().Enter."+idContainer);
          ImageSlider.debug(methodName, "setInterval::timeout().Enter."+idContainer+". Idx [ " + idx +" ]");
          
          $(idContainer).find('img').each(
          function (index) {
              
              if (index != idx ){
                 $(this).hide();              
              }else{
                 $(this).show();
              }
          }       
       );
          
          if (idx < numImages-1){
             idx++;
          }else{
             idx = 0;          
          }
          ImageSlider.debug(methodName, "setInterval::timeout().Exit."+idContainer);
       }, 
           timeout*1000);
       this.debugExit(methodName);
       
    }
   };
  

