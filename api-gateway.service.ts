import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ApiGatewayService {

  constructor() { }

  async submitClaim(payLoad:any): Promise<any> {
    console.log(payLoad);
    const formData: FormData = new FormData();
    formData.append('name',payLoad.name);
    formData.append('surname',payLoad.surname);
    formData.append('company_name',payLoad.company_name);
    formData.append('email',payLoad.email);
    formData.append('dob',payLoad.dob);
    formData.append('gender',payLoad.gender);
    formData.append('content_type',payLoad.content_type);
    formData.append('which_photography',payLoad.which_photography);
    try {
      let res = fetch('http://localhost/api/sign_up.php', {
        method: 'POST',
        body: formData
      }).then(response => response.json()).catch(err => {
        console.log("Error in then:");
        console.log(err);
        // return err;
      });
      console.log("Result:");
      console.log(res);

      return res;
    } catch (error) {
      console.log("In try catch:");
      console.log(error);
    }

  }
}
