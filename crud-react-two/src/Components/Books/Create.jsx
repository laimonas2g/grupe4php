import { useContext, useState, useRef, useEffect } from 'react';
import DataContext from '../../Contexts/DataContext';
import InputError from '../InputError';
import { basicValidator, hasErrors } from '../../Validators/basicValidator';

export default function Create() {

    const { setStoreBook, serverErrors, serverSuccess } = useContext(DataContext);

    const [title, setTitle] = useState('');
    const [author, setAuthor] = useState('');
    const [published_year, setPublished_year] = useState('');

    const titleInputRef = useRef(null);
    const authorInputRef = useRef(null);
    const yearInputRef = useRef(null);

    const inputsMap = new Map([
        ['title', { ref: titleInputRef, prop: 'title' }],
        ['author', { ref: authorInputRef, prop: 'author' }],
        ['published_year', { ref: yearInputRef, prop: 'published_year' }]
    ]);

    const [errors, setErrors] = useState({});

    useEffect(_ => {
        if (serverSuccess) {
            setTitle('');
            setAuthor('');
            setPublished_year('');
        }
    }, [serverSuccess]);

    useEffect(_ => {
        if (serverErrors) {
            Object.entries(serverErrors).forEach(([field, messages]) => {
                if (inputsMap.has(field)) {
                    const { ref, prop } = inputsMap.get(field);
                    ref.current.classList.add('is-invalid');
                    setErrors(prev => ({ ...prev, [prop]: messages }));
                }
            });
        }
    }, [serverErrors]);



    const handleTitle = e => {
        let error;
        setTitle(e.target.value);

        error = basicValidator('Title', e.target, 'max', 30);
        setErrors(prev => ({ ...prev, title: error }));


    }

    const handleAuthor = e => {
        setAuthor(e.target.value);
        let error;
        [
            { type: 'noDigits' },
            { type: 'max', param: 40 }
        ]
            .forEach(rule => {
                if (error) return;
                error = basicValidator('Author', e.target, rule.type, rule.param);
                setErrors(prev => ({ ...prev, author: error }));
            });
    }

    const handlePublished_year = e => {
        let error;
        setPublished_year(e.target.value);
        error = basicValidator('Year', e.target, 'onlyDigits');
        setErrors(prev => ({ ...prev, published_year: error }));
    }

    const handleSave = _ => {

        if (hasErrors({ ...errors })) {
            return;
        }
        let isError = '';
        const rules = [
            { type: 'required', el: titleInputRef.current, name: 'Title', prop: 'title' },
            { type: 'min', param: 2, el: titleInputRef.current, name: 'Title', prop: 'title' },
            { type: 'required', el: authorInputRef.current, name: 'Author', prop: 'author' },
            { type: 'min', param: 2, el: authorInputRef.current, name: 'Author', prop: 'author' },
            { type: 'required', el: yearInputRef.current, name: 'Year', prop: 'published_year' },
            { type: 'year', el: yearInputRef.current, name: 'Year', prop: 'published_year' }
        ];
        for (const rule of rules) {
            const error = basicValidator(rule.name, rule.el, rule.type, rule.param);

            if (error && isError === rule.prop) {
                continue;
            }

            if (error) {
                isError = rule.prop;
            }

            setErrors(prev => {
                return { ...prev, [rule.prop]: error };
            });
        }
        if (isError) {
            return;
        }


        setStoreBook({
            title,
            author,
            published_year
        });

    }

    return (
        <div className="card mt-5 mb-5">
            <div className="card-header">
                <h2>Create new Book</h2>
            </div>
            <div className="card-body">
                <p className="card-text">Fill form to add new book.</p>
                <div className="mb-3">
                    <label className="form-label">Title</label>
                    <InputError message={errors.title} />
                    <input ref={titleInputRef} type="text" className="form-control" onChange={handleTitle} value={title} />

                </div>
                <div className="mb-3">
                    <label className="form-label">Author</label>
                    <InputError message={errors.author} />
                    <input ref={authorInputRef} type="text" className="form-control" onChange={handleAuthor} value={author} />

                </div>
                <div className="mb-3">
                    <label className="form-label">Year</label>
                    <InputError message={errors.published_year} />
                    <input ref={yearInputRef} type="text" className="form-control" onChange={handlePublished_year} value={published_year} />
                </div>

                <button type="button" disabled={hasErrors({ ...errors })} className="btn btn-outline-primary" onClick={handleSave}>Save</button>
            </div>
        </div>
    );
}