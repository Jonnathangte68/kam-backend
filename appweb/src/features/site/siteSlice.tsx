/* eslint-disable no-shadow-restricted-names */
import { CombinedState, createAsyncThunk, createSlice, PayloadAction } from '@reduxjs/toolkit';
import axios from 'axios';
import _ from 'lodash';
import { RootState } from '../../app/store';

export interface DemoState {
    /*
    // Data Sources
    users: any;
    owners: any;
    students: any;
    staffs: any;
    vehicles: any;
    classes: any;
    locations: any;
    transactions: any;
    ownerProfiles: any;
    userImageVault: any;
    calendars: any;

    // Auth

    userlogin: any;
    userName?: string;

    // States

    isAddingStudent: boolean;
    isShowingStudent: boolean;
    isAddingStaff: boolean;
    isShowingStaff: boolean;
    isAddingVehicle: boolean;
    isShowingVehicle: boolean;
    isShowingClass: boolean;
    isAddingClass: boolean;
    isShowingClassInformation: boolean;
    isAddingLocation: boolean;
    isShowingLocation: boolean;
    isAddingTransaction: boolean;
    isShowingTransaction: boolean;

    // async fetch status
    isFetchingOwnerProfiles: 'idle' | 'success' | 'error';
    isFetchingVehicles: 'idle' | 'success' | 'error';
    isFetchingTransactions: 'idle' | 'success' | 'error';

    isFetchingStudent: 'idle' | 'success' | 'error';
    isFetchingLocation: 'idle' | 'success' | 'error';
    isFetchingClass: 'idle' | 'success' | 'error';
    isFetchingVehicle: 'idle' | 'success' | 'error';
    isFetchingStaff: 'idle' | 'success' | 'error';

    isFetchingStudentError?: string;
    isFetchingTransactionError?: string;
    isFetchingLocationError?: string;
    isFetchingClassError?: string;
    isFetchingVehicleError?: string;
    isFetchingStaffError?: string;

    // UI controls
    menuOptionSelected: number;
    */
}

const initialState: DemoState = {
    /*
    users: [],
    owners: [],
    students: [],
    staffs: [],
    vehicles: [],
    classes: [],
    locations: [],
    transactions: [],
    userlogin: {},
    ownerProfiles: {},
    userImageVault: [],
    calendars: [],

    isAddingStudent: false,
    isShowingStudent: false,
    isAddingStaff: false,
    isShowingStaff: false,
    isAddingVehicle: false,
    isShowingVehicle: false,
    isShowingClass: false,
    isAddingClass: false,
    isShowingClassInformation: false,
    isAddingLocation: false,
    isShowingLocation: false,
    isAddingTransaction: false,
    isShowingTransaction: false,

    isFetchingOwnerProfiles: 'idle',
    isFetchingVehicles: 'idle',
    isFetchingTransactions: 'idle',

    isFetchingStudent: 'idle',
    isFetchingLocation: 'idle',
    isFetchingClass: 'idle',
    isFetchingVehicle: 'idle',
    isFetchingStaff: 'idle',

    menuOptionSelected: 0
    */
};


export const test = createAsyncThunk(
  '/api/admin/vehicles',
  async (newVehicle: any, { rejectWithValue, getState }) => {
    // try {
    //   const vehicleForm = {
    //     v_model: newVehicle?.model,
    //     v_type: newVehicle?.vehicle_type,
    //     vin: newVehicle?.vin,
    //     license_plate_id: newVehicle?.plate,
    //     color: newVehicle?.color,
    //     odo_meter: newVehicle?.odometer,
    //     service_date: newVehicle?.service_date,
    //     insurance_due_date: newVehicle?.insurance_date,
    //     oil_change_date: newVehicle?.oil_change_due_date,
    //     inspection_date: newVehicle?.inspection_due_date,
    //     tire_rotation_date: newVehicle?.tire_rotation_due_date,
    //     photo: newVehicle?.photo,
    //     location: 1
    //   };
    //   const addStaffAxiosInstance = axios.create();
    //   const resp = await addStaffAxiosInstance.post(`${SERVER_BASE_API}/admin/vehicles`, vehicleForm);
    //   return resp.data;
    // } catch (err) {
    //     const message = (err as any).response?.data?.message;
    //     return rejectWithValue(message);
    // }
  }
);

export const siteSlice = createSlice({
  name: 'site',
  initialState,
  reducers: {
    setIsFetchingLocation: (state, action: PayloadAction<any>) => {
    //   state.isFetchingLocation = action.payload;
    }
  },
  extraReducers: (builder) => {
    builder
    .addCase(test.pending, (state) => {
    //   state.isFetchingVehicle = 'idle';
    //   console.log("sending the request to /api/owner/vehicles pending");
    })
    .addCase(test.fulfilled, (state, action) => {
    //   state.isFetchingVehicle = 'success';
    //   console.log("sending the request completed to /api/owner/vehicles pending");
    //   console.log("result ", action.payload);
    })
    .addCase(test.rejected, (state, action) => {
    //   state.isFetchingVehicle = 'error';
    //   state.isFetchingVehicleError = JSON.stringify(action.payload);
    //   console.log("sending the request error to /api/owner/vehicles pending");
    //   console.log("result ", action.payload);
    })
  },
});

export const {
    setIsFetchingLocation
} = siteSlice.actions;

// export const getDemoUser = (state: RootState) => state.demo.userlogin;
// export const getUser = (state: RootState) => state.demo.userlogin;

export default siteSlice.reducer;
