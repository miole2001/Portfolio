document.addEventListener('DOMContentLoaded', () => {

    const form = document.querySelector(".form-wizard")
    const progress = form.querySelector(".progress");
    const steps = form.querySelectorAll(".step");
    const stepsContainer = form.querySelector(".steps-container");
    const stepIndicators = form.querySelectorAll(".progress-container li");
    const prevButton = form.querySelector('.prev-btn');
    const nextButton = form.querySelector('.next-btn');
    const submitButton = form.querySelector('.submit-btn');

    document.documentElement.style.setProperty('--steps', stepIndicators.length)

    let currentStep = 0;

    const progressUpdate = () => {
        let width = currentStep / (stepIndicators.length - 1);
        progress.style.transform = `scaleX(${width})`;

        stepsContainer.style.height = steps[currentStep].offsetHeight + "px";

        stepIndicators.forEach((indicator, index) => {
            indicator.classList.toggle("current", currentStep === index);
            indicator.classList.toggle("done", currentStep > index);
        });

        steps.forEach((step, index) => {
            step.style.transform = `translateX(-${currentStep * 100}%)`;
            step.classList.toggle("current", currentStep === index);

        });
            updateButtons();
    };

    const updateButtons = () => {
        prevButton.hidden = currentStep === 0;
        nextButton.hidden = currentStep >= stepIndicators.length - 1;
        submitButton.hidden = !nextButton.hidden;
    };

    const isValidStep = () => {
        const fields = steps[currentStep].querySelectorAll('input, textarea');
        return [...fields].every((field) => field.reportValidity());
    }

    //event listener for next and previous button

    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => input.addEventListener('focus', (e) => {
        const focusedElement = e.target;
        //get the step where the focused element belongs

        const focusedStep = [...steps].findIndex((step) => step.conatins(focusedElement));
        
        if (focusedStep !== -1 && focusedStep !== currentStep){

            if(!isValidStep()) return;

            currentStep = focusedStep;
            progressUpdate();
        }

        stepsContainer.scrollTop = 0;
        stepsContainer.scrollLeft = 0;
    }));

    prevButton.addEventListener("click", (e) => {
        e.preventDefault(); //to prevent form submission

        if(currentStep > 0){
            currentStep--;
            progressUpdate();
        }
    });

    nextButton.addEventListener("click", (e) => {
        e.preventDefault(); //to prevent form submission

        if(!isValidStep()) return;

        if(currentStep < stepIndicators.length - 1){
            currentStep++;
            progressUpdate();
        }
    });
    progressUpdate();
});