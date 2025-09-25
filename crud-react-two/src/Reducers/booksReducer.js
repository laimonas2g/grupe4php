import { updateBook } from '../Actions/books';
import * as C from '../Constants/booksTypes';

export default function booksReducer(state, action) {
    let stateCopy = state === null ? null : structuredClone(state);


    switch (action.type) {
        case C.GET_BOOKS_FROM_SERVER:
            {
            let row = 1;
            stateCopy = action.payload.map(b => ({...b, row: row++}));
            break;
            }
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

        case C.CANCEL_UPDATING_BOOK:
            stateCopy = state = state.map(b => b.id === action.payload.id ? b.copy : b);
            break;    

        case C.CONFIRM_UPDATING_BOOK:
            break;    

        case C.SORT_BOOKS:
            switch(action.payload) {
                case '0':
                    stateCopy.sort((a, b) => a.row - b.row);
                    break;
                case '1':
                    stateCopy.sort((a, b) => a.title.localeCompare(b.title));
                    break;
                case '2':
                    stateCopy.sort((a, b) => a.author.localeCompare(b.author));
                    break;
                default:
            }        

        default:
    }

    return stateCopy;

}