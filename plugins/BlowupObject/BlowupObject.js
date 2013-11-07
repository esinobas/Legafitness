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
    
    idObjectM: "",
    timeM: 0,
    returnToOriginalSizeM : false,
    repeatM: false,
    enableDebugM: false,
    numIterationsM: 0,
    
    debugSetup: {
                  file: "BlowupObject.js"
                                              
    },
    
    debugEnter: function (theMethod) {
            if (this.enableDebugM == true){
               var textToDebug = this.debugSetup['file'] + '::'+theMethod+'()::Enter';
               console.debug(textToDebug);
            }
    },
    debugExit: function (theMethod) {
            if (this.enableDebugM == true){
               var textToDebug = this.debugSetup['file'] + '::'+theMethod+'()::Exit';
               console.debug(textToDebug);
            }
    },
    debug: function (theMethod, theText) {
            if (this.enableDebugM == true){
               var textToDebug = this.debugSetup['file'] + '::'+theMethod+'()::'+theText;
               console.debug(textToDebug);
            }
    },
    
    animate:function(theWidth, theHeight, theOriginalWidth, theOriginalHeight){
    
       var methodName = "animate";
       
       this.debugEnter(methodName);

       this.debug(methodName, 'Id Object [ ' + idObjectM + ' ]. width [ '+ 
                        theWidth + ' ]. height [ ' + theHeight +
                       ' ]. Time [ ' + timeM + ' seconds ].'+
                       ' The original width [ ' + theOriginalWidth + ' ].'+
                       ' The original heigth [ ' + theOriginalHeight + ' ].'
                       );    
                      
      numIterationsM ++;
      
      var diffTop = parseInt(theOriginalHeight) - parseInt(theHeight);
      var diffLeft = parseInt(theOriginalWidth) - parseInt(theWidth);
      this.debug(methodName, 'Diff Top = Original Height[ '+ theOriginalHeight 
                               + ' ] - Height [ ' + theHeight + ' ] = [ '+ 
                               diffTop + ' ]. Diff Left = Original Width[ '
                               + theOriginalWidth 
                               + ' ] - Width [ ' + theWidth + ' ] = [ '+ 
                               diffLeft + ' ].');
                               
       var top = $('#'+idObjectM).css('top');
       var left = $('#'+idObjectM).css('left');
       this.debug(methodName, 'top [ ' + top +' ]. left [ ' + left +' ].');
       
       var newTop = parseInt(top) + parseInt(diffTop/2);
       var newLeft = parseInt(left) + parseInt(diffLeft/2);
       
       this.debug(methodName, 'New top [ ' + newTop +' ]. New left [ ' + newLeft +' ].');
             
      
       $('#'+idObjectM).animate(
             {
                width:theWidth,
                height:theHeight,
                top: newTop+'px',
                left: newLeft+'px'
             },
             timeM * 1000,
             function () {
                 BlowupObject.debugEnter('JQuery::animate::complete');  
                 if ((returnToOriginalSizeM && numIterationsM < 2 ) || repeatM){                 
                    BlowupObject.animate(theOriginalWidth, 
                                     theOriginalHeight, theWidth, theHeight);
                 }
                 BlowupObject.debugExit('JQuery::animate::complete');
             }
          );
       this.debugExit(methodName);
    },    
    
    /**
     * The parameters:
     * 'object': The object id that will be blowup and blowdown
     * 'finishSize': object finish 'width and height'
     * 'time': seconds that must pass in the operation
    */
    init:function(theParameters){
       var methodName = "init";
       
       this.debugEnter(methodName);
       
       idObjectM = theParameters['object'];
       var finishWidth = theParameters['finishSize']['finishWidth'];
       var finishHeight = theParameters['finishSize']['finishHeight'];
       timeM = theParameters['time'];
       returnToOriginalSizeM = theParameters['returnToOriginalSize'];
       repeatM = theParameters['repeat'];
       numIterationsM = 0;
       
       this.debug(methodName, 'Object [ ' + idObjectM + ' ]. Finish Size [ width= ' + 
                 finishWidth + '. height= ' + finishHeight + 
                 ' ]. Time Transaction [ ' + timeM + ' sec. ].'+
                 (returnToOriginalSizeM?'[Return to Original Size].':'')+
                 (repeatM?'[Repeat]':''));
                 
       var object = $('#'+idObjectM);
       if (object == null){
          this.debug(methodName, 'The object [ ' + idObjectM + ' ] doesn\'t.' );
       }else{
          var originalWidth = object.css('width');
          var originalHeight = object.css('height');
          this.debug(methodName, 'Original Size [ width= ' + originalWidth + 
                                ' height= '+ originalHeight + ' ].');     
                                
          this.animate( finishWidth, finishHeight,
                        originalWidth, originalHeight);
       }
   
      
       this.debugExit(methodName);
    }
 
 };