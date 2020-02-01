function validateEmptyForm(formID){
    let data = $(`#${formID}`).serialize();
    let d = data.split('&');
    let emptyInputs = 0;

    for(let i=0; i < d.length; i++){
        let controls = d[i].split('=');
        if(controls[1].localeCompare('A') === 0 || controls[1].localeCompare('') === 0){
            emptyInputs++;
        }
    }

    return emptyInputs;
};