const plegableCursos = document.querySelector('.plegableCursos');
const tarjetasCursos = document.querySelector('.contents');

const desplegarFaq = document.querySelectorAll('.desplegarFaq');
const plegarFaq = document.querySelectorAll('.plegarFaq');
const preguntas = document.querySelectorAll('.respuesta');

const checked = document.querySelectorAll('.checked');
const unchecked = document.querySelectorAll('.unchecked');
const hecho = document.querySelectorAll('.hecho');
const noHecho = document.querySelectorAll('.no-hecho');

const despCalendario = document.querySelectorAll('.despcalendario');
const semana = document.querySelectorAll('.programa');

if (plegableCursos == null || tarjetasCursos == null) {
    Array.from(plegarFaq).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(plegarFaq).indexOf(item);
            preguntas[index].classList.add('hidden');
            desplegarFaq[index].classList.remove('hidden');
            plegarFaq[index].classList.add('hidden');
        })
    });
    Array.from(desplegarFaq).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(desplegarFaq).indexOf(item);
            preguntas[index].classList.remove('hidden');
            desplegarFaq[index].classList.add('hidden');
            plegarFaq[index].classList.remove('hidden');
        })
    });
    Array.from(checked).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(checked).indexOf(item);
            hecho[index].classList.add('hidden');
            noHecho[index].classList.remove('hidden');
            unchecked[index].classList.remove('hidden');
            checked[index].classList.add('hidden');
        })
    });
    Array.from(unchecked).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(unchecked).indexOf(item);
            hecho[index].classList.remove('hidden');
            noHecho[index].classList.add('hidden');
            unchecked[index].classList.add('hidden');
            checked[index].classList.remove('hidden');
        })
    })

} else {
    function plegarCursos() {
        tarjetasCursos.classList.toggle('hidden');
    }
    Array.from(despCalendario).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(despCalendario).indexOf(item);
            semana[index].classList.toggle('hidden');
            console.log("click")
        })
    });
    plegableCursos.addEventListener('click', plegarCursos);
}
