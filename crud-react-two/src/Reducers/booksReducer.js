import * as C from '../Constants/booksTypes';


export default function booksReducer(state, action) {
    let stateCopy = state === null ? null : structuredClone(state);


    switch (action.type) {
        case C.GET_BOOKS_FROM_SERVER:
            stateCopy = action.payload
            break;
        case C.MARK_BOOK_TO_DELETE:
            stateCopy = state.map(b => action.payload === b.id ? { ...b, delete: true } : b);
            break;
        case C.REMOVE_DELETED_BOOK:
        case C.CANCEL_ADDING_NEW_BOOK:
            stateCopy = state.filter(b => b.id !== action.payload);
            break;
        case C.RESTORE_MARKED_BOOK:
            stateCopy = state.map(b => action.payload === b.id ? { ...b, delete: false } : b);
            const book = 'Gali egzistuot';
            break;
        case C.ADD_NEW_BOOK:
            // stateCopy = [action.payload, ...state];
            // Alternatyvinis variantas
            stateCopy.unshift(action.payload);
            break;
        case C.CONFIRM_ADDING_NEW_BOOK:
            {
                // stateCopy = state.map(b => action.payload.tmpId === b.id ? { ...b, id: action.payload.id } : b);
                // Alternatyvinis variantas
                const book = stateCopy.find(b => b.id === action.payload.tmpId);
                book.id = action.payload.id;
                break;
            }
        case C.UPDATE_BOOK:
            stateCopy = state.map(b => b.id === action.payload.id ? { ...b, ...action.payload, copy: { ...b } } : b);
            break;



        default:
    }

    return stateCopy;

}