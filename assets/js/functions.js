// DOM Element's
const counters = document.querySelectorAll('.counter-up');
const counters2 = document.querySelectorAll('.counter-up-proj');

/*** Using forEach() ***/

/*
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const speed = 5000;

        const inc = target / speed;

        if(count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    }

    updateCount();
})

*/

/*** Same functionality, now using for...of ***/

function test(){
    for(let n of counters) {
        const updateCount = () => {
            const target = + n.getAttribute('data-target');
            const count = + n.innerText;
            const speed = 100000000000000;
            
            const inc = target / speed; 
    
            if(count < target) {
                n.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                n.innerText = target;
            }
        }
    
        updateCount();
    }
}

function test2(){
    for(let n of counters2) {
        const updateCount = () => {
            const target = + n.getAttribute('data-target');
            const count = + n.innerText;
            const speed = 100000000000000;
            
            const inc = target / speed; 
    
            if(count < target) {
                n.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                n.innerText = target;
            }
        }
    
        updateCount();
    }
}



