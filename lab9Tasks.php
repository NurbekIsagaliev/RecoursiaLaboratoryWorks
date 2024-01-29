1)
a = 2; b = 10;
for (let index = a; index <= b; index++) {
    
    console.log(index);
    
}

2)
a = 2; b = 10;
sum = 0;
for (let index = a; index <= b; index++) {
    
    sum = sum + Math.pow(index,2);
    
    
}

console.log(sum);


3) 
a = 10; b = 20;

for (let index = a; index <= b; index++) {

    for (let index2 = 1; index2 <= index - a + 1; index2++) {

        console.log(index);
        
    }
   
}
4)
a = 3; b = 10;
for (let index = a; index <= b; index++) {

    for (let index2 = 0; index2 < index; index2++) {

        console.log(index);
        
    }
   
}
5)
a = 10; b = 20;

for (let index = a; index <= b; index++) {

    if(index % 2 == 0){
        console.log(index);
    }
}
6)
a = 1; b = 10;
sum = 0;
for (let index = a; index <= b; index++) {

    if(index % 2 !== 0){
        sum+=index;
    }
   
}
console.log(sum);

