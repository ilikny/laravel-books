const div = document.getElementById('latest-books')
// console.log(div)


// div.innerHTML = `<img class="rotate" src="img/kisspng-lolcat-kitten-pet-5afe4a36c9ec56.1433183815266145828271.png" alt=""></img>`

const loadData = async () => {
  
  const response = await fetch('/api/books/latest');

    const data = await response.json();

    data.forEach((element) => {
      div.innerHTML += `<a href="/book/${element.id}"><div class="book_latest">
    <h3>${element.title}</h3>
    
    <img src="${element.image}" alt="">
    <h3>${element.price}$</h3>
    ${element.description} 
    </div></a>`
      
    });

}


loadData()