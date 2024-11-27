const MWF = $("#MWF");
const TP = $("#TP");
const CC = $("#CC");
const DM = $("#DM");

const MWFBox = $("#MWF-box");
const TPBox = $("#TP-box");
const CCBox = $("#CC-box");
const DMBox = $("#DM-box");

if (sessionStorage.getItem("category") === null) {
  sessionStorage.setItem("category", "MWF");
}

if (sessionStorage.getItem("category") === "MWF") {
  toggleMWF();
} else if (sessionStorage.getItem("category") === "TP") {
  toggleTP();
} else if (sessionStorage.getItem("category") === "CC") {
  toggleCC();
} else if (sessionStorage.getItem("category") === "DM") {
  toggleDM();
}

MWF.on("click", toggleMWF);
TP.on("click", toggleTP);
CC.on("click", toggleCC);
DM.on("click", toggleDM);

function toggleMWF() {
  sessionStorage.setItem("category", "MWF");
  reset();
  MWF.addClass("active");
  MWFBox.css("display", "block");
}

function toggleTP() {
  sessionStorage.setItem("category", "TP");
  reset();
  TP.addClass("active");
  TPBox.css("display", "block");
}

function toggleCC() {
  sessionStorage.setItem("category", "CC");
  reset();
  CC.addClass("active");
  CCBox.css("display", "block");
}

function toggleDM() {
  sessionStorage.setItem("category", "DM");
  reset();
  DM.addClass("active");
  DMBox.css("display", "block");
}

function reset() {
  MWF.removeClass("active");
  TP.removeClass("active");
  CC.removeClass("active");
  DM.removeClass("active");

  MWFBox.css("display", "none");
  TPBox.css("display", "none");
  CCBox.css("display", "none");
  DMBox.css("display", "none");
}
