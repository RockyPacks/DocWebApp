<div id="analytics-section" class="bg-white rounded-lg shadow-sm overflow-hidden hidden fade-in">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gray-800">System Analytics</h2>
        <p class="text-gray-600 mt-1">Key metrics and statistics about your patient records</p>
    </div>
    
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="text-lg font-medium text-blue-800">Total Patients</h3>
                <p id="total-patients" class="text-3xl font-bold text-blue-600 mt-2">0</p>
            </div>
            
            <div class="bg-green-50 p-4 rounded-lg">
                <h3 class="text-lg font-medium text-green-800">Gender Distribution</h3>
                <div id="gender-chart" class="mt-2 h-20">
                    <!-- Chart will be inserted here -->
                </div>
            </div>
            
            <div class="bg-purple-50 p-4 rounded-lg">
                <h3 class="text-lg font-medium text-purple-800">Age Groups</h3>
                <div id="age-chart" class="mt-2 h-20">
                    <!-- Chart will be inserted here -->
                </div>
            </div>
        </div>
        
        <div class="mt-8">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Activity</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-600">No recent activity to display</p>
            </div>
        </div>
    </div>
</div>