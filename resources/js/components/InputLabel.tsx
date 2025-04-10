import { LabelHTMLAttributes } from 'react';

export default function InputLabel({
    value,
    className = '',
    children,
    ...props
}: LabelHTMLAttributes<HTMLLabelElement> & { value?: string }) {
    return (
        <label
            {...props}
            className={
                'label ' +
                className
            }
        >
            <span className={"label-text"}>
                {value ? value : children}

            </span>
        </label>
    );
}
