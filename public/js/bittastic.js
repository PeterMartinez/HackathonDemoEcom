BitTastic={
	api_url:'http://fakeecomsite.com/iFrame',
	iFrame:null,	
	init:function(){
		BitTastic.monitor();
	},
//START Discovery Tools
	incentive:function(){
		
	}	
//START iFrame Tools	
	initIFrame:function(container){
		BitTastic.iFrame = document.createElement('iframe');
			BitTastic.iFrame.id = "BitTastic";
			BitTastic.iFrame.frameBorder = 0;
			BitTastic.iFrame.scrolling = 0;
			BitTastic.iFrame.style.width = "100%";
			BitTastic.iFrame.style.height = "100%";
			BitTastic.iFrame.src = BitTastic.api_url;
		$(container).prepend(BitTastic.iFrame);

		//Init Com when loaded.
		var inter = window.setInterval(function() {
			if (BitTastic.iFrame.contentWindow.document.readyState === "complete") {
			      	window.clearInterval(inter);
			      	BitTastic.initCom();
			      	console.log("loaded");
			    }
		}, 100);
	}
	initCom:function(){
		window.addEventListener("message", BitTastic.receiveMessage, false);
		BitTastic.sendMessage("hi");
	},
	sendMessage:function(message){
		BitTastic.iFrame.contentWindow.postMessage(message,BitTastic.api_url);
	},
	receiveMessage:function(event){
		
		console.log(event.data);
		//Do something
		switch(event.data) {
		    case 'close':
		        	BitTastic.iFrame.remove();
		        break;
		    
		    default:
		        //
		}
	}
//END iFrame Tools	

}