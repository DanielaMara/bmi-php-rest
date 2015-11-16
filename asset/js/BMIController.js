var BMIController = {
	
	init: function() {
		BMIController.setForm();
	},
	
	setForm: function() {
		var form = document.querySelector('form');
		form.addEventListener('submit', function(event) {
			BMIController.calculateBMI(form);
			event.preventDefault();
		});
	},
	
	calculateBMI: function(form) {
		var 
			weight = parseFloat(form.weight.value),
			height = parseFloat(form.height.value),
			result = 0;
		
		var callback = function(result) {
			debugger;
			BMIController.showResult(result);			
		};
		
		BMIController.showLoading(true);
		BMIService.getBmiResult(weight, height, callback);
	},
	
	showResult: function(result) {
		debugger;
		var spanResult = document.querySelector('.result');
		var spanDescrition = document.querySelector('.description');
		spanResult.innerHTML = parseFloat(result.bmiIndex).toFixed(2);
		spanDescrition.innerHTML = result.description;
		BMIController.showLoading(false);
	},
	
	showLoading: function(isLoading) {
		document.querySelector('.label').innerHTML = isLoading ? 'loading...' : 'BMI Result'
	}
};

//initialization
BMIController.init();
