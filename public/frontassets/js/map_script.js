// Data Dummy di file JSON
var rs_rujukan = JSON.parse(JSON.stringify(rs_rujukan));
var data_sebaran = JSON.parse(JSON.stringify(data));

// Init
var map = L.map("map", {
  center: [5.5417, 95.3333],
  zoom: 12,
});

L.tileLayer(
  "https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Ts9g8McLuNVEfjGFTHeG",
  {
    attribution:
      '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>',
  }
).addTo(map);

var i = 0;

rs_rujukan.forEach((element) => {
  var icon = "frontassets/images/hospital.png";
  var data = element.data;
  var content = "<table>";

  $.each(data, function (key, value) {
    content +=
      '<tr><td width="70">' +
      key +
      "</td><td>:</td><td><b>" +
      value +
      "</b></td></tr>";
  });

  content += "</table>";

  var markerIcon = L.icon({
    iconUrl: icon,
    shadowUrl: "",
    iconSize: [35, 35], // size of the icon
    shadowSize: [50, 64], // size of the shadow
  });
  // end of custom marker

  L.marker([element.koordinatX, element.koordinatY], { icon: markerIcon })
    .addTo(map)
    .bindPopup(content)
    .openPopup();
});

data_sebaran.forEach((element) => {
  var icon = "frontassets/images/success-icon.png";
  var data = element.data;
  var content = "<b>";

  $.each(data, function (key, value) {
    var isLastElement = key == data.length - 1;

    content += key.toUpperCase() + " : " + value;

    if (!isLastElement) {
      content += "<br>";
    }
  });

  content += "</b>";

  // custom marker
  if (element.data.positif > 10) {
    icon = "frontassets/images/danger-icon.png";
  } else if (element.data.positif > 0) {
    icon = "frontassets/images/warning-icon.png";
  }

  var markerIcon = L.icon({
    iconUrl: icon,
    shadowUrl: "",
    iconSize: [30, 35], // size of the icon
    shadowSize: [50, 64], // size of the shadow
  });
  // end of custom marker

  L.marker([element.koordinatX, element.koordinatY], { icon: markerIcon })
    .addTo(map)
    .bindPopup(content)
    .openPopup();
});
