import React, {Fragment} from 'react'; //hooks
import CardComponent from './components/CardComponent';

function RegisterPage(){

    return(
        <Fragment>
            <CardComponent titulo="Hello World!" contenido="my content..."></CardComponent>
            <CardComponent titulo="Hello Universe!" contenido="my other content..."></CardComponent>
            <CardComponent titulo="Hello Far Beyond!" contenido="my final destination..."></CardComponent>
        </Fragment>
    )
}

export default RegisterPage;
