const search = document.getElementById('search');
const div = document.getElementById('results');



search.addEventListener('input', (event) => {

  const loadData = async () => {
  
  const response = await fetch(`/api/books/search?search=${search.value}`);

    const data = await response.json();
    
    div.innerHTML = ''
    data.forEach((element) => {
      div.innerHTML += `<div class="book_latest">
      <h3><a href="/book/${element.id}">${element.title}</a></h3>
      <img src="${element.image}" alt="">
      <h6>${element.publication_date}</h6>
      <h3>${element.price}$</h3>
      ${element.description} 
      </div>`
      
    });
    
  }

  
  loadData()

  
})