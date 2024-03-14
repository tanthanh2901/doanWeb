// parameters: confirm-path, confirm-data (json format)
// parameters: successful message, failed message

class ConfirmModal extends HTMLElement{
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
        var confirmModal = document.querySelector('.confirm-modal');
        var yesBtn = confirmModal.querySelector('.yes-btn');
        var cancelBtn = confirmModal.querySelectorAll('.cancel-btn');

        Array.from(cancelBtn).forEach((button)=>{
            button.addEventListener('click', ()=>{
                confirmModal.classList.toggle('d-block');
            })
        })
        yesBtn.addEventListener('click', ()=>{
            var confirmPath = this.getAttribute('confirm-path');
            var confirmData = this.getAttribute('confirm-data');
            var successfulMess = this.getAttribute('successful-message');
            var failedMess = this.getAttribute('falied-message');
            
            fetch(confirmPath, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: confirmData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status) alert(successfulMess)
                else alert(failedMess)
                confirmModal.classList.toggle('d-block');
                window.location.reload();
            })
            .catch(error => console.error(error))
        })
    }
}
customElements.define('confirm-modal', ConfirmModal);