package com.jticketing.pages;

import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class Event_AttendeeFieldTypesPage extends TestBase{

	CreateEventPage event = new CreateEventPage(driver);
	
	public void CreateEventWithAttendeeFieldTypeText(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		ButtonClick(event.Events);
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		ScrollDown1();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
		ScrollUp2();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeText);
		ScrollDown2();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ScrollUp3();
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with attendee field type Text");
	}
	
	public void CreateEventWithAttendeeFieldTypeTextArea(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		ScrollDown1();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
		ScrollUp2();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeTextArea);
		ScrollDown2();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ScrollUp3();
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with attendee field type TextArea");
	}
	
	public void CreateEventWithAttendeeFieldTypeDate(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		ScrollDown1();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
		ScrollUp2();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeDate);
		ScrollDown2();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ScrollUp3();
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with attendee field type Date");
	}
	
	public void CreateEventWithAttendeeFieldTypeSingleSelect(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle, String options) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		ScrollDown1();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
		ScrollUp2();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeSingleSelect);
		EnterValue(event.FirstAttendeeFieldOptionsSeparatedBy, options);
		ScrollDown2();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ScrollUp3();
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with attendee field type Single Select");
	}
	
	
	
	
}
