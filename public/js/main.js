const settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://type.fit/api/quotes",
  "method": "GET"
}
  async function searchWikipedia(name,id) {
  const endpoint = `https://en.wikipedia.org/w/api.php?action=query&list=search&prop=info&inprop=url&utf8=&format=json&origin=*&srlimit=20&srsearch=`+name;
  const response = await fetch(endpoint);
  if (!response.ok) {
    throw Error(response.statusText);
  }
  const json = await response.json();
 //console.log(json['query']['search'][0]['title']);
 get_tof(json['query']['search'][0]['title'],id);

}
function get_tof(name,id){
//console.log($('https://en.wikipedia.org/w/api.php?action=query&prop=pageimages&piprop=original&titles=Bruce'));

  $.ajax({
  type: "GET",
 url: "/GetMaqoloat/"+name,
 //url:'https://en.wikipedia.org/w/api.php?action=query&prop=pageimages&piprop=original&titles=Bruce',
  success: function(result){
    result=JSON.parse(result);


 //  console.log(result['value'][0]['thumbnailUrl']);
let rr=result['query']['pages'];
rr=(rr[Object.keys(rr)[0]]);
//console.log((rr[Object.keys(rr)[0]]));
rr=rr['original']['source'];
 $(".img"+String(id)).attr("src",rr);
 console.log('$(".img"'+String(id))+'.attr("src",'+rr+')';
   //console.log(typeof(result['value'][0]['thumbnailUrl']));
   // return result['value'][0]['thumbnailUrl'];
  }
});
}
function getMaqolat(){
//console.log('tst');


$.ajax({
  type: "GET",
  url: "/GetMaqoloat",
//  contentType: "application/json; charset=utf-8",
//  dataType: "json",
success: function(result){
//console.log(typeof(result));
max=result.length-3;
min=0;
pos=Math.floor(Math.random() * (max - min + 1)) + min;
$("#res0").text(result[pos].text);
$("#auter0").text(result[pos].author);
$("#res1").text(result[pos+1].text);
$("#auter1").text(result[pos+1].author);
searchWikipedia(result[pos+1].author,1);
$("#res2").text(result[pos+2].text);
$("#auter2").text(result[pos+2].author);
searchWikipedia(result[pos+2].author,2);
$("#res3").text(result[pos+3].text);
$("#auter3").text(result[pos+3].author);
searchWikipedia(result[pos+3].author,3);

  }
});

}


