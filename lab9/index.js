// let a = 10;
// if (a == 10) {
//     console.log(true);
// }
// for (let i = 0; i < 10; i++) {
//     console.log(i);
// }
// test(16, function(k) {
//     console.log(k);
// });
// function test(a, b)
// {
//     b(a);
// }



document.body.style.background = 'red';
setTimeout(() => document.body.style.background = '', 3000);

// setTimeout(function() {
//     let button = document.getElementById("button1");
//     button.setAttribute("class", "btn btn-primary btn-lg");
// }, 5000);

//let button = document.getElementById("button1");
// button.onclick = function () {
//    console.log('hello world');
// }

// button.addEventListener("click", function() {
//     console.log("Hello Im a DOM");
// })

document.addEventListener("DOMContentLoaded", function() {
    document.body.style.background = 'red';

    setTimeout(() => {
        document.body.style.background = '';
    }, 3000);
});
