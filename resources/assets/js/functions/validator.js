module.exports.email_exists = {
    getMessage: field => `The email is already taken by someone else.`,
    validate: value => {
    	  return axios
            .post("/check-email-exists", {email:value})
            .then(res => {
              if(res.data.exists > 0){
	              return false;
              }else{
              	return true;
              }
            })
            .catch(error => {
            	return true;
            });
    }
       
}