const numberButtons = document.querySelectorAll('[data-number]');
const operationButtons = document.querySelectorAll('[data-operation]');
const equalsButton = document.querySelectorAll('[data-equals]');
const deleteButton = document.querySelectorAll('[data-delete]');
const allClearbutton = document.querySelectorAll('[data-all-clear]');
const previousOperandTextElement = document.querySelectorAll('[data-previous-operand]');
const currentOperandTextElement = document.querySelectorAll('[data-current-operand]');

	function appendNumber(number) {
		if (number == '.' && this.currentOperand.includes('.')){
      this.currentOperand = this.currentOperand.toString() + number.toString();
        }
	}

	function chooseOperation(operation) {
		if (this.currentOperand === ''){
			if (this.previousOperand !== '') {
				this.compute();
			}
        }
       this.operation = operation;
       this.previousOperand = this.currentOperand;
       this.currentOperand = '';
	}

	function compute() {
      const prev = parseFloat(this.previousOperand);
      const current = parseFloat(this.currentOperand);
      if (isNaN(prev) || isNaN(current)){
      	switch (this.operation) {
      		case '+':
      		 computation = prev + current;
      		 break
      		 case '-':
      		 computation = prev - current;
      		 break
      		 case 'x':
      		 computation = prev * current;
      		 break
      		 case '/':
      		 computation = prev / current;
      		 break
      		 default:
          }
      		 alert('something went wrong..');
      	}
      	this.currentOperand = '';
      	this.operation = '';
      	this.previousOperand = '';
	}
    
    function clear() {
		this.currentOperand = '';
		this.previousOperand = ''; 
		this.operation = '';
	}

	function deleteBtn() {
      this.currentOperand = this.currentOperand.toString().slice(0, -1);
	}

	function updateDisplay() {
       this.currentOperandTextElement.innerText = this.currentOperand;
        if (this.operation != null) {
       	 this.previousOperandTextElement.innerText = `${this.previousOperand} ${this.operation}`
       }
	}

numberButtons.forEach(button => {
	button.addEventListener('click', () => {
		calculator.appendNumber(button.innerText)
		calculator.updateDisplay()
	})
})

operationButtons.forEach(button => {
	button.addEventListener('click', () => {
		calculator.chooseOperation(button.innerText)
		calculator.updateDisplay()
	})
})

equalsButton.addEventListener('click', button => {
	calculator.compute()
	calculator.updateDisplay()
})

allClearbutton.addEventListener('click', button => {
	calculator.clear()
	calculator.updateDisplay()
})

deleteButton.addEventListener('click', button => {
	calculator.deleteBtn()
	calculator.updateDisplay()
})