export default function countReducer(state, action) {

    switch (action.type) {
        case 'ADD_ONE':
            return state + 1;
        case 'REM_ONE':
            return state - 1;
        case 'ADD_MANY':
            return state + parseInt(action.payload);
        default:
            return state;
    }



}