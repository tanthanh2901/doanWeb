class SearchDropdown extends HTMLElement{
    constructor(){
        super();
        let html = `
            <input placeholder="Search Posts" name="search" type="text" id="search-bar"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                autocomplete="false">
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">  
            </div>
            <button type="submit"><i class="fa fa-search"></i></button>
        `;
        this.innerHTML = html;
    }

    connectedCallback(){
        let searchBar = document.getElementById('search-bar');
        let dropdownMenu = document.querySelector('.dropdown-menu');
        searchBar.addEventListener('keyup', (event)=>{
            var query = event.target.value;
            dropdownMenu.innerHTML = '';
            if(query.length>2){
                fetch('search.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'query=' + encodeURIComponent(query),
                })
                .then(response => response.json())
                .then(data => {
                    if(data.length>0){
                        data.forEach(post => {
                            var a = document.createElement('a');
                            a.classList.add("dropdown-item");
                            a.href= `blog-single.php?p=${post.id}`;
                            a.innerHTML = post.postTitle;
                            // console.log(a);
                            dropdownMenu.appendChild(a);
                        });
                    }else {
                        var a = document.createElement('a');
                        a.classList.add("dropdown-item");
                        a.innerHTML = "Blog not found";
                        // console.log(a);
                        dropdownMenu.appendChild(a);
                    }
                });
            }
            // else{
            //     dropdownMenu.classList.add('d-none');
            // }
        })
    }
}
customElements.define('search-dropdown', SearchDropdown);