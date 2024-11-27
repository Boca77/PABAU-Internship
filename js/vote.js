const MWF = $("#MWF");
const TP = $("#TP");
const CC = $("#CC");
const DM = $("#DM");

const MWFBox = $("#MWF-box");
const TPBox = $("#TP-box");
const CCBox = $("#CC-box");
const DMBox = $("#DM-box");

toggleMWF();

MWF.on("click", toggleMWF);
TP.on("click", toggleTP);
CC.on("click", toggleCC);
DM.on("click", toggleDM);

function toggleMWF() {
  reset();
  MWF.addClass("active");
  MWFBox.css("display", "block");
}

function toggleTP() {
  reset();
  TP.addClass("active");
  TPBox.css("display", "block");
}

function toggleCC() {
  reset();
  CC.addClass("active");
  CCBox.css("display", "block");
}

function toggleDM() {
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
