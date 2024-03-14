
class ConfirmModalForm extends HTMLElement{
    constructor(){
        super();
        let html = `
            <div class="modal confirm-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirm</h5>
                            <button type="button" class="close cancel-btn" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to continue?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary yes-btn">Yes</button>
                            <button type="button" class="btn btn-secondary cancel-btn" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        this.innerHTML = html;
    }

    connectedCallback(){
        var confirmModalForm = document.querySelector('.confirm-modal');
        var cancelBtn = confirmModalForm.querySelectorAll('.cancel-btn');

        Array.from(cancelBtn).forEach((button)=>{
            button.addEventListener('click', ()=>{
                confirmModalForm.classList.toggle('d-block');
            })
        })

    }
}
customElements.define('confirm-modal-form', ConfirmModalForm);