import { css } from "@emotion/css";
import { MDBCol, MDBRow } from "mdbreact";
import CenterAligned from "../../components/CenterAligned";
import CountryPicker from "../../components/CountryPicker";
import { IoReorderThree } from "react-icons/io5";
import COLORS from "../../utils/colors";
import { useNavigate } from "react-router-dom";
import NavigationBar from "../../components/NavigationBar";
import { useState } from "react";
import ChatDialog from "../../components/ChatDialog";

const ServicesScreen = () => {
    const navigate = useNavigate();
    const [isChatDialogVisible, setIsChatDialogVisible] = useState(false);
    
    const handleToggleLiveChat = () => {
        setIsChatDialogVisible(!isChatDialogVisible);
    };

    const handleNewServiceRequest = () => {
        navigate("/service-request", { replace: false });
    };

    const renderServices = () => (
        <MDBRow>
            {[1,2,3,4,5,6,7,8,9].map(
                (category, divIndex) => {

                    return (
                        <>
                            <MDBCol md="6" className={css`margin-top: 0vh; margin-bottom: 0vh;`}>
                                <div className={css`width: 100%; height: 82%; background-color: blue; border: 1px solid black; border-radius: 3vh; padding-top: .22%; padding-bottom: .22%; padding-left: 3.15%;`}>
                                    <p className={css`height: 3vh; width: 66%; font-family: 'Lexend Deca', sans-serif; font-weight: 700; font-size: 2.66rem; color: ${COLORS.WHITE_1}; text-shadow: 1px 1px ${COLORS.BLACK_1}; margin-top: 1.70%; margin-bottom: 1.70%;`}>Test</p>
                                    <p className={css`height: 3vh; width: 66%; font-family: 'Lexend Deca', sans-serif; font-weight: 400; font-size: 0.88rem; color: ${COLORS.WHITE_1}; text-shadow: 1px 1px ${COLORS.BLACK_1}; margin-top: 1.70%; margin-bottom: 3.70%;`}><br/>House cleaning service with high-quality workers, window cleaning can be included.</p>
                                    <button onClick={handleNewServiceRequest} className={css`height: 5vh; width: 22%; color: ${COLORS.WHITE_1}; border-radius: 0.35vh; border-style: none; padding: 0.66vh 1.77vh 0.66vh 1.77vh; background-color: ${COLORS.PURPLE}; margin-top: 1.70%; margin-bottom: 1.70%;`}>Order Now</button>
                                    <div className={css`position: relative; top: -16.95vh; left: 85%; background-color: ${COLORS.WHITE_1}; border-radius: 50%; width: 8vh; height: 8vh; text-align: center; padding-top: 3.15%; padding-bottom: 3.15%; color: ${COLORS.BLACK_1}; font-weight: bold;`}>
                                        24€/h
                                    </div>
                                </div>
                            </MDBCol>
                        </>
                    );
                }
            )}
        </MDBRow>
    );

    return (
        <MDBRow className={css`width: 100%; height: 100%; max-height: 100%; margin: 0 !important;`}>

            {/* MAIN HEADER */}
            <MDBCol md="12" className={css`height: 12vh; padding: 0 !important;`}>
                <div className={css`display: flex; justify-content: space-between; background-color: ${COLORS.WHITE_1}; width: 100%; height: 100%;`}>
                    <CenterAligned>
                        <IoReorderThree className={css`width: 7vh; height: 7vh; margin-left: 10vh;`} />
                    </CenterAligned>
                        <img src="/assets/img/Logo/header-logo.png" alt="kam logo"/>
                    <CenterAligned>
                        <CountryPicker className={css`width: 19.45vh; height: 4.25vh; padding-top: 0.1vh; padding-bottom: 0.1vh;`} />
                    </CenterAligned>
                </div>
            </MDBCol>

            {/* NAV OPTIONS */}
            <NavigationBar />

            {/* BANNER CONTACT US PHONE NUMBER */}
            <MDBCol md="12" className={css`padding: 0px !important;`}>
                <img 
                    alt="header"
                    src="/assets/img/contact-us/header.png"
                    className={css`width: 100%; object-fit: cover;`}
                />
            </MDBCol>

            {/* SERVICES CARDS */}
            <MDBCol md="12" className={css`padding: 30.284px 0px 3.955vh 0px;`}>
                <p className={css`padding-top: 0.85vh; margin-bottom: 2.5vh !important; text-align: center; font-weight: 600; font-size: 1.715rem;`}>
                    Cleaning Services
                </p>
                <div className={css`padding-left: 10vh; padding-right: 10vh;`}>
                    {renderServices()}
                </div>
            </MDBCol>
            
            {/* CONTACT US EMAIL PHONE FOOTER BANNER */}
            <MDBCol md="12" className={css`padding: 0 !important;`}>
                <img 
                    alt="header"
                    src="/assets/img/Contact us/footer.png"
                    className={css`width: 100%; object-fit: cover;`}
                />
            </MDBCol>

            {/* OPEN LIVE CHAT */}
            <img
                className={css`width: 19vh; height: 9vh; position: fixed; top: 69%; right: 2vh;`}
                alt="open live chat dialog"
                src="/assets/img/live-chat.png"
                onClick={handleToggleLiveChat}
            />
            <ChatDialog visible={isChatDialogVisible} onClose={() => setIsChatDialogVisible(false)} />

            {/* FOOTER */}
            <MDBCol md="12" className={css`height: 12vh; padding: 0 !important;`}>
                <div className={css`display: flex; justify-content: center; background-color: ${COLORS.WHITE_1}; width: 100%; height: 100%;`}>
                    <img src="/assets/img/Logo/header-logo.png" alt="kam service to your door footer logo"/>
                </div>
            </MDBCol>
        </MDBRow>
    );
};

export default ServicesScreen;