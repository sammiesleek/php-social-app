		// const loginbt =document.querySelector('.logbt')
		// const signupbt = document.querySelector('.signbt')
		// const signupg = document.querySelector('.signpg')
		// const logpg = document.querySelector('.logpg')

     
		// const controller = function(){
		// 	loginbt.addEventListener('click', ()=>{
		// 		logpg.style.display='flex'
		// 		signupg.style.display='none'
		// 	})
		// 	signupbt.addEventListener('click', ()=>{
		// 		logpg.style.display='none'
		// 		signupg.style.display='flex'
		// 	})
		// }

		


		// countries API
		function countries(){
			const Option = document.getElementById('Country')
			var xhr = new XMLHttpRequest();
			xhr.open('GET','resources/countries.json',true);
			xhr.onload = function(){
				if(this.status ==200){
					var countries= JSON.parse(this.response).data;
					var rst = '';
					
					countries.forEach(country => {
						
					  rst += '<option  value='+country.name+'>  '+country.name+' </option>'
					
					});
					Option.innerHTML= rst;
				}
				
				
			}
			xhr.send()
		}
		countries();