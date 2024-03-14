let addCategoryBtn = document.getElementById('add-category-btn');
let categoryModal = document.querySelector('.category-modal');
let deleteBtns = document.getElementsByClassName('btn-delete');
let deleteModal = document.querySelector('.delete-modal');
var confirmModal = document.querySelector('confirm-modal');
var closeCategoryModalbtn = categoryModal.querySelectorAll('.close-btn');
var saveCategoryBtn = categoryModal.querySelector('.save-btn');
const interactCategoryPath = 'interactcategories.php';
// delete buttons
Array.from(deleteBtns).forEach((button)=>{
    button.addEventListener('click', ()=>{
        const categoryID = button.getAttribute('data');
        const confirmData = {
            deleteCategory: +categoryID
        }
        const successfulMessage = 'Your category have been deleted!';
        const failedMessage = 'Your category can not be deleted!';
        confirmModalFunc(interactCategoryPath, confirmData, successfulMessage, failedMessage)
    })
}
)

// add category
addCategoryBtn.addEventListener('click', ()=>{
    categoryModal.classList.toggle('d-block');
})
// close category modal

Array.from(closeCategoryModalbtn).forEach((button)=>{
    button.addEventListener('click', ()=>{
        categoryModal.classList.toggle('d-block');
    })
})
// save new category modal
saveCategoryBtn.addEventListener('click', ()=>{
    categoryValue = categoryModal.querySelector('.category-input').value;

    var confirmData = {
        "category": categoryValue
    }
    const successfulMessage = 'Your new category have been added!';
    const failedMessage = 'Your new category can not be added!';
    // toggle confirm modal
    confirmModalFunc(interactCategoryPath, confirmData, successfulMessage, failedMessage);
})
// confirm data toggle and add data
function confirmModalFunc(confirmPath, confirmData, successfulMess, failedMess){
    // toggle confirm modal
    var confirmCategory = confirmModal.querySelector('.confirm-modal');
    confirmCategory.classList.toggle('d-block');
    // add data to confirm modal

    confirmModal.setAttribute('confirm-path', confirmPath);
    confirmModal.setAttribute('confirm-data', JSON.stringify(confirmData));
    confirmModal.setAttribute('successful-message', successfulMess);
    confirmModal.setAttribute('falied-message', failedMess);
}