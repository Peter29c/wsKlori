
/**
 * Created by Joel Valdivia
 * Date 28 Mayo 2020
 * Description: Archivo de Redux para Login
 */

// BEGIN Constantes
const LOGIN_REQUEST = 'LOGIN_REQUEST';
const LOGIN_SUCCESS = 'LOGIN_SUCCESS';
const LOGIN_FAILURE = 'LOGIN_FAILURE';
const LOGOUT = 'LOGOUT';
// END Constantes

// END Reducer

/** obtiene el usuario de LocalStorage */
let user = JSON.parse(localStorage.getItem('user'));

// verifica si el usuario ya ha iniciado sesión en caso contrario
// inicia con un objeto vacío
const stateInitial = user ? { authenticate: true, user } : {};

export default function loginReducer(state = stateInitial, action) {

  // verifica que cambiará dependiendo el tipo de accion
  switch (action.type) {
    case LOGIN_REQUEST:
      // regresa el objeto del estado con el nuevo objeto
      return { ...state, isAuthenticate: false, user };
    case LOGIN_SUCCESS:
      // regresa el objeto del estado con el nuevo objeto
      return { ...state, isAuthenticate: true, user: action.payload };
    case LOGIN_FAILURE:
      // regresa objeto vacío para el objeto error
      return { ...state };
    case LOGOUT:
      // regresa objeto vacío para limpiar el localStorage
      localStorage.clear();
      return {};
    default:
      // regresa el estado actual
      return state;
  }
}
// END Reducer

// BEGIN Acciones
export const loginRequest = (data) => { return { type: LOGIN_REQUEST, payload: data } }
export const loginSuccess = (data) => { return { type: LOGIN_SUCCESS, payload: data } }
export const loginFailure = (error) => { return { type: LOGIN_FAILURE, payload: error } }
export const logout = () => { return { type: LOGOUT } }
// END Acciones
