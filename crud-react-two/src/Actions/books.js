import * as C from '../Constants/booksTypes';


export const getBooks = books => {
    return {
        type: C.GET_BOOKS_FROM_SERVER,
        payload: books
    }
}

export const markToDelete = id => {
    return {
        type: C.MARK_BOOK_TO_DELETE,
        payload: id
    }
}
export const Delete = id => {
    return {
        type: C.REMOVE_DELETED_BOOK,
        payload: id
    }
}
export const restoreDeleted = id => {
    return {
        type: C.RESTORE_MARKED_BOOK,
        payload: id
    }
}

export const addNewBook = (book, id) => {
    return {
        type: C.ADD_NEW_BOOK,
        payload: { ...book, id }
    }
}
export const confirmAddingNewBook = (tmpId, id) => {
    return {
        type: C.CONFIRM_ADDING_NEW_BOOK,
        payload: { tmpId, id }
    }
}
export const cancelAddingNewBook = id => {
    return {
        type: C.CANCEL_ADDING_NEW_BOOK,
        payload: id
    }
}

export const updateBook = book => {
    return {
        type: C.UPDATE_BOOK,
        payload: book
    }
}
export const cancelUpdatingBook = id => {
    return {
        type: C.CANCEL_UPDATING_BOOK,
        payload: id
    }
}
export const confirmUpdatingBook = _ => {
    return {
        type: C.CONFIRM_UPDATING_BOOK,
    }
}

export const sortBooks = sort => {
    return {
        type: C.SORT_BOOKS,
        payload: sort
    }
}
