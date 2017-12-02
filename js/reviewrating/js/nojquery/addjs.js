document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");
   
  var slider = tns({
    container: '#vertical',
    items: 4,
    axis: "vertical",
    slideBy: 'page',
    autoplay: true,
    speed: 400
  });
  
 });
