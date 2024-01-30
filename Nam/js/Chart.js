const ctx = document.getElementById('barchart');

const date = document.querySelector('.container-nafi .chart .date');
const price = document.querySelector('.container-nafi .chart .price');

console.log(date.value);
console.log(price.value);

const arrdate = date.value.trim().split(" ");
const arrprice = price.value.trim().split(" ");

console.log(arrdate);

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: arrdate,
      datasets: [{
        label: '# of Votes',
        data: arrprice,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });