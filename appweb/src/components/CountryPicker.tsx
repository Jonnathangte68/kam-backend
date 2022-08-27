import Form from 'react-bootstrap/Form';

const CountryPicker = (props: any) => {
    return (
        <Form.Select className={props?.className}>
            <option value="1">English</option>
            <option value="2">Finnish</option>
        </Form.Select>
    );
};


export default CountryPicker;