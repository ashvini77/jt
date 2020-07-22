package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class EventWithoutTicketPage extends TestBase{

	public EventWithoutTicketPage(WebDriver driver) {
		super();
	}
	
	CreateEventPage event = new CreateEventPage(driver);

	public void CreateEventWithoutTicketType(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firstattendeefieldtitle) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		event.SelectCreator();
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		SelectRadioButton(event.PublishEvent);
		ScrollDown1();
		SelectDropdownValue(event.SelectAccess, event.AccessPublic);
		SelectRadioButton(event.EnableSeeEventAttendee);
		ScrollDown2();
	    ButtonClick(event.DetailInfo);
	    EnterValue(event.ChooseEventImage, eventimage);
	    EnterValueInIframe(event.EventDescription, eventdescription);
	    ScrollDown3();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeText);
		ScrollDown3();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully without ticket");
}
	
}
