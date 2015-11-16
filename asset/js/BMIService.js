var BMIService = 
{
	getBmiResult: function(weight, height, callback) {
		debugger;
		$.ajax({
		  type: 'GET',
		  url: 'https://bmi-php-rest-danielamara.c9users.io/api/bmi/height/' + height + '/weight/' + weight,
		  data : {'height': height, 'weight': weight},
		  dataType: 'json',
		  success: function(result) {
		  	callback(result);
		  },
		  error: function() {
		  	callback(null);
		  }
		});
	}
};