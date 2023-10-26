const search = document.getElementById('search');
const div = document.getElementById('results');



search.addEventListener('input', (event) => {

  const loadData = async () => {
  
  const response = await fetch(`/api/books/search?search=${search.value}`);

    const data = await response.json();
    
    div.innerHTML = ''
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

  
})