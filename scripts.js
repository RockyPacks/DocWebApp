let currentPatientId = null;

function toggleSection(sectionId) {
    const content = document.getElementById(`${sectionId}-content`);
    const icon = document.getElementById(`${sectionId}-icon`);
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

function showSection(sectionId) {
    ['records-section', 'add-section', 'analytics-section'].forEach(id => {
        document.getElementById(id).classList.add('hidden');
    });
    document.getElementById(sectionId).classList.remove('hidden');
}

function searchPatients() {
    const query = document.getElementById('search-box').value;
    const gender = document.getElementById('filter-gender').value;
    fetch(`api.php?action=search&query=${encodeURIComponent(query)}&gender=${gender}`)
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('patient-table-body');
            tbody.innerHTML = '';
            if (data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="8" class="px-6 py-4 text-center text-gray-500">No patients found.</td></tr>';
            } else {
                data.forEach(patient => {
                    const row = `
                        <tr>
                            <td class="px-6 py-4">${patient.id}</td>
                            <td class="px-6 py-4">${patient.name}</td>
                            <td class="px-6 py-4">${patient.age}</td>
                            <td class="px-6 py-4">${patient.gender}</td>
                            <td class="px-6 py-4">${patient.contact}</td>
                            <td class="px-6 py-4">${patient.last_visit || '-'}</td>
                            <td class="px-6 py-4">${patient.status || 'Active'}</td>
                            <td class="px-6 py-4 text-right">
                                <button onclick="viewPatient(${patient.id})" class="text-blue-600 hover:text-blue-800">View</button>
                                <button onclick="editPatient(${patient.id})" class="text-green-600 hover:text-green-800 ml-2">Edit</button>
                                <button onclick="deletePatient(${patient.id})" class="text-red-600 hover:text-red-800 ml-2">Delete</button>
                            </td>
                        </tr>`;
                    tbody.innerHTML += row;
                });
            }
            document.getElementById('patient-count').textContent = data.length;
        });
}

function resetForm() {
    document.getElementById('new-patient-form').reset();
    document.querySelectorAll('.text-red-500').forEach(el => el.classList.add('hidden'));
}

function validateForm() {
    let isValid = true;
    ['name', 'dob', 'gender', 'contact', 'emergencyContactName', 'emergencyContactPhone', 'insuranceProvider', 'policyNumber'].forEach(field => {
        const input = document.getElementById(field);
        const error = document.getElementById(`${field}-error`);
        if (!input.value) {
            error.classList.remove('hidden');
            isValid = false;
        } else {
            error.classList.add('hidden');
        }
    });
    return isValid;
}

document.getElementById('new-patient-form').addEventListener('submit', e => {
    e.preventDefault();
    if (!validateForm()) return;
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);
    const action = currentPatientId ? 'update' : 'create';
    data.id = currentPatientId;
    fetch(`api.php?action=${action}`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                resetForm();
                showSection('records-section');
                searchPatients();
            } else {
                alert('Error saving patient');
            }
        });
});

function viewPatient(id) {
    fetch(`api.php?action=get&id=${id}`)
        .then(response => response.json())
        .then(patient => {
            currentPatientId = id;
            document.getElementById('modal-name').textContent = patient.name || '-';
            document.getElementById('modal-dob').textContent = patient.dob || '-';
            document.getElementById('modal-age').textContent = patient.age || '-';
            document.getElementById('modal-gender').textContent = patient.gender || '-';
            document.getElementById('modal-contact').textContent = patient.contact || '-';
            document.getElementById('modal-address').textContent = patient.address || '-';
            document.getElementById('modal-emergency-name').textContent = patient.emergencyContactName || '-';
            document.getElementById('modal-emergency-phone').textContent = patient.emergencyContactPhone || '-';
            document.getElementById('modal-emergency-relation').textContent = patient.emergencyContactRelation || '-';
            document.getElementById('modal-insurance-provider').textContent = patient.insuranceProvider || '-';
            document.getElementById('modal-policy-number').textContent = patient.policyNumber || '-';
            document.getElementById('modal-insurance-type').textContent = patient.insuranceType || '-';
            document.getElementById('modal-insurance-expiry').textContent = patient.insuranceExpiry || '-';
            document.getElementById('modal-allergies').textContent = patient.allergies || 'No known allergies';
            document.getElementById('modal-chronic-conditions').textContent = patient.chronicConditions || 'None reported';
            document.getElementById('modal-past-surgeries').textContent = patient.pastSurgeries || 'None reported';
            document.getElementById('modal-family-history').textContent = patient.familyHistory || 'None reported';
            document.getElementById('modal-current-medications').textContent = patient.currentMedications || 'None reported';
            document.getElementById('modal-blood-type').textContent = patient.bloodType || 'Unknown';
            document.getElementById('modal-organ-donor').textContent = patient.organDonor || 'No';
            document.getElementById('patient-modal').classList.remove('hidden');
        });
}

function editPatient(id) {
    viewPatient(id);
    showSection('add-section');
    fetch(`api.php?action=get&id=${id}`)
        .then(response => response.json())
        .then(patient => {
            document.getElementById('name').value = patient.name || '';
            document.getElementById('dob').value = patient.dob || '';
            document.getElementById('gender').value = patient.gender || '';
            document.getElementById('contact').value = patient.contact || '';
            document.getElementById('email').value = patient.email || '';
            document.getElementById('address').value = patient.address || '';
            document.getElementById('nationalId').value = patient.nationalId || '';
            document.getElementById('emergencyContactName').value = patient.emergencyContactName || '';
            document.getElementById('emergencyContactPhone').value = patient.emergencyContactPhone || '';
            document.getElementById('emergencyContactRelation').value = patient.emergencyContactRelation || '';
            document.getElementById('emergencyContactAddress').value = patient.emergencyContactAddress || '';
            document.getElementById('allergies').value = patient.allergies || '';
            document.getElementById('chronicConditions').value = patient.chronicConditions || '';
            document.getElementById('pastSurgeries').value = patient.pastSurgeries || '';
            document.getElementById('familyHistory').value = patient.familyHistory || '';
            document.getElementById('currentMedications').value = patient.currentMedications || '';
            document.getElementById('insuranceProvider').value = patient.insuranceProvider || '';
            document.getElementById('policyNumber').value = patient.policyNumber || '';
            document.getElementById('insuranceType').value = patient.insuranceType || '';
            document.getElementById('insuranceExpiry').value = patient.insuranceExpiry || '';
            document.getElementById('bloodType').value = patient.bloodType || '';
            document.getElementById('organDonor').value = patient.organDonor || '';
            document.getElementById('notes').value = patient.notes || '';
        });
}

function deletePatient(id) {
    if (confirm('Are you sure you want to delete this patient?')) {
        fetch(`api.php?action=delete&id=${id}`, { method: 'POST' })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    searchPatients();
                } else {
                    alert('Error deleting patient');
                }
            });
    }
}

function closeModal() {
    document.getElementById('patient-modal').classList.add('hidden');
    currentPatientId = null;
}

function openFollowUpForm(followUpId) {
    if (followUpId) {
        fetch(`api.php?action=get_followup&id=${followUpId}`)
            .then(response => response.json())
            .then(followUp => {
                document.getElementById('followup-date').value = followUp.date || '';
                document.getElementById('subjective').value = followUp.subjective || '';
                document.getElementById('objective').value = followUp.objective || '';
                document.getElementById('assessment').value = followUp.assessment || '';
                document.getElementById('plan').value = followUp.plan || '';
            });
    } else {
        document.getElementById('followup-form').reset();
    }
    document.getElementById('followup-modal').classList.remove('hidden');
}

function closeFollowUpModal() {
    document.getElementById('followup-modal').classList.add('hidden');
}

document.getElementById('followup-form').addEventListener('submit', e => {
    e.preventDefault();
    if (!validateFollowUpForm()) return;
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);
    data.patient_id = currentPatientId;
    fetch('api.php?action=save_followup', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                closeFollowUpModal();
                viewPatient(currentPatientId);
            } else {
                alert('Error saving follow-up');
            }
        });
});

function validateFollowUpForm() {
    let isValid = true;
    ['followup-date', 'subjective', 'objective', 'assessment', 'plan'].forEach(field => {
        const input = document.getElementById(field);
        const error = document.getElementById(`${field}-error`);
        if (!input.value) {
            error.classList.remove('hidden');
            isValid = false;
        } else {
            error.classList.add('hidden');
        }
    });
    return isValid;
}

document.getElementById('records-tab').addEventListener('click', () => {
    showSection('records-section');
    document.getElementById('records-tab').classList.add('border-blue-700', 'text-blue-700');
    document.getElementById('add-tab').classList.remove('border-blue-700', 'text-blue-700');
    document.getElementById('analytics-tab').classList.remove('border-blue-700', 'text-blue-700');
});

document.getElementById('add-tab').addEventListener('click', () => {
    showSection('add-section');
    document.getElementById('add-tab').classList.add('border-blue-700', 'text-blue-700');
    document.getElementById('records-tab').classList.remove('border-blue-700', 'text-blue-700');
    document.getElementById('analytics-tab').classList.remove('border-blue-700', 'text-blue-700');
    resetForm();
    currentPatientId = null;
});

document.getElementById('analytics-tab').addEventListener('click', () => {
    showSection('analytics-section');
    document.getElementById('analytics-tab').classList.add('border-blue-700', 'text-blue-700');
    document.getElementById('records-tab').classList.remove('border-blue-700', 'text-blue-700');
    document.getElementById('add-tab').classList.remove('border-blue-700', 'text-blue-700');
});

['modal-overview-tab', 'modal-medical-tab', 'modal-visits-tab', 'modal-followup-tab', 'modal-documents-tab'].forEach(tab => {
    document.getElementById(tab).addEventListener('click', () => {
        ['modal-overview-content', 'modal-medical-content', 'modal-visits-content', 'modal-followup-content', 'modal-documents-content'].forEach(content => {
            document.getElementById(content).classList.add('hidden');
        });
        document.getElementById(tab.replace('tab', 'content')).classList.remove('hidden');
        ['modal-overview-tab', 'modal-medical-tab', 'modal-visits-tab', 'modal-followup-tab', 'modal-documents-tab'].forEach(t => {
            document.getElementById(t).classList.remove('border-blue-500', 'text-blue-600');
            document.getElementById(t).classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
        });
        document.getElementById(tab).classList.add('border-blue-500', 'text-blue-600');
        document.getElementById(tab).classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
    });
});

window.onload = () => {
    searchPatients();
    showSection('records-section');
};