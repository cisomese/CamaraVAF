const multiStepForm = document.querySelector("[data-multi-step]");
const formSteps = [...multiStepForm.querySelectorAll("[data-step]")];

let currentStep = formSteps.findIndex((step) => {
  return step.classList.contains("active");
});

if (currentStep < 0) {
  currentStep = 0;
  formSteps[currentStep].classList.add("active");
  showCurrentStep();
}

multiStepForm.addEventListener("click", (e) => {
  if (e.target.matches("[data-next]")) {
    currentStep += 1;
  } else if (e.target.matches("[data-back]")) {
    currentStep -= 1;
  }
  showCurrentStep();
});

function showCurrentStep() {
  formSteps.forEach((step, index) => {
    step.classList.toggle("active", index === currentStep);
  });
}

var personal_info = document.getElementById("personal-info");
var emergency_cont = document.getElementById("emergency-cont");
var refernce_person = document.getElementById("refernce-person");
var reasons_fr_vol = document.getElementById("reasons-fr-vol");

var Next1 = document.getElementById("Next1");
var Next2 = document.getElementById("Next2");
var Next3 = document.getElementById("Next3");
var Back1 = document.getElementById("Back1");
var Back2 = document.getElementById("Back2");
var Back3 = document.getElementById("Back3");

Next1.onclick = function () {
  progress.style.width = "50%";
};
Back1.onclick = function () {
  progress.style.width = "25%";
};

Next2.onclick = function () {
  progress.style.width = "75%";
};

Back2.onclick = function () {
  progress.style.width = "50%";
};

Next3.onclick = function () {
  progress.style.width = "100%";
};

Back3.onclick = function () {
  progress.style.width = "75%";
};
