import { css } from "@emotion/css";
import { MDBCol, MDBRow } from "mdbreact";
import COLORS from "../utils/colors";
import RegularTextInput from "./TextInput/RegularTextInput";

const ContactUsForm = (props: any) => {

    const handleFormSubmit = () => {
        props?.onSubmit();
    };

    return (
        <MDBRow className={css`padding: 0.33vh 33vh 5.15vh 33vh; background-color: ${COLORS.GRAY_BACKGROUND}`}>

            {/* TELEPHONE NUMBER */}
            <MDBCol md="12" className={css`padding-left: 0px !important; padding-right: 0px !important; margin-top: 2.652vh; margin-bottom: 2.652vh;`}>
                <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>Telephone Number</p>
                <RegularTextInput
                    name="xs3"
                    title=""
                    placeholder="Telephone number"
                    // value={instructor1}
                    // onChange={(value => setInstructor1(value))}
                />
            </MDBCol>

            {/* NAMES */}
            <MDBCol md="12" className={css`padding-left: 0px !important; padding-right: 0px !important; margin-top: 2.652vh; margin-bottom: 2.652vh;`}>
                <MDBRow>
                    <MDBCol md="6">
                        <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>First name</p>
                        <RegularTextInput
                            name="xs3"
                            title=""
                            placeholder="First name"
                            // value={instructor1}
                            // onChange={(value => setInstructor1(value))}
                        />
                    </MDBCol>
                    <MDBCol md="6">
                        <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>Last name</p>
                        <RegularTextInput
                            name="xs3"
                            title=""
                            placeholder="Last name"
                            // value={instructor1}
                            // onChange={(value => setInstructor1(value))}
                        />
                    </MDBCol>
                </MDBRow>
            </MDBCol>

            {/* ADDRESS */}
            <MDBCol md="12" className={css`padding-left: 0px !important; padding-right: 0px !important; margin-top: 2.652vh; margin-bottom: 2.652vh;`}>
                <MDBRow>
                    <MDBCol md="6">
                        <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>Street address</p>
                        <RegularTextInput
                            name="xs3"
                            title=""
                            placeholder="Street address"
                            // value={instructor1}
                            // onChange={(value => setInstructor1(value))}
                        />
                    </MDBCol>
                    <MDBCol md="6">
                        <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>E-mail</p>
                        <RegularTextInput
                            name="xs3"
                            title=""
                            placeholder="E-mail"
                            // value={instructor1}
                            // onChange={(value => setInstructor1(value))}
                        />
                    </MDBCol>
                </MDBRow>
            </MDBCol>

            {/* CITY */}
            <MDBCol md="12" className={css`padding-left: 0px !important; padding-right: 0px !important; margin-top: 2.652vh; margin-bottom: 2.652vh;`}>
                <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>City</p>
                <RegularTextInput
                    name="xs3"
                    title=""
                    placeholder="City"
                    // value={instructor1}
                    // onChange={(value => setInstructor1(value))}
                />
            </MDBCol>

            {/* MESSAGE */}
            <MDBCol md="12" className={css`padding-left: 0px !important; padding-right: 0px !important; margin-top: 2.652vh; margin-bottom: 2.652vh;`}>
                <p className={css`margin-left: 1.95vh; font-family: 'Lexend Deca', sans-serif;`}>Message</p>
                <RegularTextInput
                    name="xs3"
                    title=""
                    isTextAreaField={true}
                    placeholder="Message"
                    // value={instructor1}
                    // onChange={(value => setInstructor1(value))}
                />
            </MDBCol>

            {/* BUTTON FORM SUBMIT */}
            <MDBCol md="12" className={css`padding-left: 0px !important; padding-right: 0px !important; margin-top: 2.652vh; margin-bottom: 2.652vh;`}>
                <button
                    className={css`font-family: 'Lexend Deca', sans-serif; width: 100%; height: 5vh; background-color: ${COLORS.PURPLE}; border: 1px solid ${COLORS.PURPLE}; border-radius: 4px; color: ${COLORS.WHITE_1}`}
                    onClick={handleFormSubmit}
                >
                    Send Request
                </button>
            </MDBCol>
        </MDBRow>
    );
};

export default ContactUsForm;