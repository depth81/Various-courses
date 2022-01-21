import React, {useState} from 'react'; //hooks
import './LoginStyles.css';

function LoginPage(){
    
    const [firstName,setFirstName] = useState(""); //counter inicia en 0
    const [telephone,setTelephone] = useState("");

    const validateData = (event) => {
        event.PreventDefault();
        if(firstName === '' || telephone === ''){
            alert("All fields are required");
        }else{
            event.target.reset();
            setFirstName('');
            setTelephone('');
        }
    }

    return (

        <div className="container">
            <div className="row">
                <form  onSubmit={validateData} className="col s12">
                    <div className="row">
                        <div className="input-field col s12">
                            <i className="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" className="validate" onChange={(event) => setFirstName(event.target.value)} />
                            <label for="icon_prefix">First Name {firstName}</label>
                        </div>
                        <div className="input-field col s12">
                            <i className="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" className="validate" onChange={(event) => setTelephone(event.target.value)}/>
                            <label for="icon_telephone">Telephone {telephone}</label>
                        </div>
                    </div>
                    <button className="btn waves-effect waves-light indigo" type="submit" name="action">Submit
                        <i className="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
        
    
    );

}

export default LoginPage;
