# EduGate – Student Information System

- Live Site: https://meanryncoding.github.io/edugate-student-portal/ </br>
- Repository: https://github.com/meanryncoding/edugate-student-portal

# Project Description

EduGate is a fully responsive student information portal built as a prototype web application for UiTM students. It provides a centralised dashboard for students to monitor their academic performance, course enrolment, weekly schedule, assignments, and faculty announcements all in one place.


# Features
### Authentication
- Login and Register system with hardcoded credentials
- Password show/hide toggle
- Error feedback for invalid credentials
- Auto-redirect to dashboard upon successful login

### Dashboard
- Academic summary stat cards (CGPA, courses, attendance, assignments)
- Bar chart — grade performance by subject
- Doughnut chart — GPA overview by semester
- Course progress bars
- Latest announcements preview

### My Courses
- Full list of Semester 3 enrolled courses
- Table and grid view toggle
- Search and filter by status
- Course detail modal (lecturer, venue, schedule)

### Grades & GPA
- Semester 1, 2, and 3 (current) grade breakdown
- Real subject codes and course names
- GPA line chart progression
- Grade distribution doughnut chart
- Dean's List indicator

### Schedule
- Weekly timetable with colour-coded subjects
- Today's class highlight
- Upcoming deadlines panel
- Class detail modal on click

### Assignments
- Full assignment list with status (Pending / Submitted / Overdue)
- Search and filter by course or status
- Completion bar chart by course
- Due Soon panel

### Announcements
- Category filter (Academic, Faculty, IT, Events)
- Unread counter — updates on read
- Mark all read functionality
- Full announcement modal

### My Profile
- Editable personal information (name, email, phone, hometown)
- +60 phone prefix fixed input
- Auto-capitalize name on save
- Initials update instantly on name change
- Academic info, skills progress bars, achievements

### Dark Mode
- Toggle between light and dark theme
- Saved in localStorage persists across page

### Sidebar Navigation
- Collapsible sidebar toggle (hamburger button)
- Active page highlight
- Consistent across all pages

---

## Login Credentials
   email: 2024123456@student.uitm.edu.my</br> 
   password: edugate@2026

> You can register a new account via the Register tab.



## File Structure
```
student-portal/
index.html            Login & Register page
dashboard.html        Main dashboard
courses.html          My Courses
grades.html           Grades & GPA
schedule.html         Weekly Schedule
assignments.html      Assignments
announcements.html    Announcements
profile.html          My Profile
css/--style.css        Custom stylesheet
 js/--main.js          Shared JavaScript
```

## Frameworks & Libraries

| Library | Version | Purpose |

| Bootstrap | 5.3.8 | CSS framework, responsive layout |
| Bootstrap Icons | 1.13.1 | Icon set |
| Chart.js | 4.4.4 | Data visualisation (charts) |
| Vanta.js (Birds) | Latest | Animated login background |
| Three.js | r134 | Required by Vanta.js |
| Google Fonts (Roboto) |-| Typography |

## Developer

Name: Puteri Nuryasmin Farhana binti Megat Mohd Zulkarnain </br>
Student ID: 2024402302</br>
Course: IMS566 – Advanced Web Design Development and Content Management</br>
Faculty: Faculty of Information Science
