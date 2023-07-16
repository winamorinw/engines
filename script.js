//  итак, фонкция номер 1 это 
// 1. ввод нужного сичения 
// 2. сначала иещем нужное сичение в складе , если его нет то 
// 2.2 подбираем ближайшее но с разбросом не более чем на 0.002 сотых
// 2.2.1 нужен алгоритм перебора масива что бы найти ближайщее подходящее 
// 2
let arr =[];
arr.push(0.101, 0.201, 0.303, 0.404,  0.606);

let result = document.getElementById('result');
let shift = 0.002;
let a = 1;
let b = 2;
console.log(a + b);

function send(params) {

    let n = document.getElementById('n1').value;
    console.log(n);
    n = parseInt(n);
    console.log(typeof(n));
    
    // если n больше arr[i] на 0.001 или меньше на 0.001 
    for (let i = 0; i < arr.length; i++) {
        if (n >= arr[i] - shift && n <= arr[i] + shift)
        {
            console.log('result: ' + arr[i]);
            result.innerText += ' ' + arr[i];
        }
        else
        {
            // тут подбираем сеченеи в 2 любых провода
            // let x = целевое сечение 
    
            for (let j = 0; j < arr.length; j++) 
            {
                if (arr[j] <= n + shift) 
                {
                    if (arr[j] * 2 >= n - shift && arr[j] * 2 <= n + shift) 
                    {
                        result.innerText += ' ' + arr[j] + ' + ' + arr[j];
                    
                    }
                }
                
            }
        }
        
    }
}
    

