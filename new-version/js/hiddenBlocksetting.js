const btnExit = document.querySelector('.img__exit');
const btnSetting = document.querySelectorAll('.btn-setting');
const formSetting = document.querySelector('.form-setting');

btnSetting.forEach(el=> {
    el.addEventListener('click', () => {
        formSetting.classList.toggle('d-none');
    })
});

btnExit.addEventListener('click', ()=>{
    formSetting.classList.toggle('d-none');
});