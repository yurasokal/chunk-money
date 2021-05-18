import { createStore, combineReducers } from 'redux';
import userReducer from './usersRedux';


const reducer = combineReducers({
    users: userReducer,
});

const store = createStore(reducer);

export default store;
